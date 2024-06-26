<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MDC as Table;
use Exception;
use App\Http\Requests\MDCRequests\UpdateMDC as UpdateRequest;
use App\Http\Requests\MDCRequests\AddMDC as AddRequest;
use Illuminate\Http\Request;

class MDCController extends Controller {
  protected $handle_name = "MDC";
  protected $handle_name_plural = "MDC";


 
  

  public function index() {
    $all_count = Table::count();
    $trashed_count = Table::onlyTrashed()->count();
    return kview($this->handle_name_plural . '.index', [
      'ajax_route' => route('admin.' . $this->handle_name_plural . '.ajax'),
      'delete_route' => route('admin.' . $this->handle_name_plural . '.delete'),
      'create_route' => route('admin.' . $this->handle_name_plural . '.create'),
      'table_status' => 'all', //all , trashed
      'all_count' => $all_count,
      'trashed_count' => $trashed_count,
    ]);
  }
  public function create() {
    return kview($this->handle_name_plural . '.manage', [
      'form_action' => route('admin.' . $this->handle_name_plural . '.store'),
      'edit' => 0,
    ]);
  }
  public function edit(Request $request) {
    return kview($this->handle_name_plural . '.manage', [
      'form_action' => route('admin.' . $this->handle_name_plural . '.update'),
      'edit' => 1,
      'data' => Table::where('id', '=', $request->id)->first(),
    ]);
  }
  public function store(AddRequest $request) {
    try {
      $data = $request->only([
         'name','college_name', 'college_location', 'college_district', 'college_address', 'funds_allocated', 'funds_received', 'work_progress',
    ]);
      $request->validate([
        'college_name' => 'required|string',
        'college_location' => 'required|string',
        'college_district' => 'required|string',
        'college_address' => 'required|string',
        'funds_allocated' => 'required|numeric',
        'funds_received' => 'required|numeric',
        'work_progress' => 'required|numeric|min:0|max:100',
      ]);
      $table = Table::create($data);


      return redirect()->to(route('admin.' . $this->handle_name_plural . '.index'))->with('success', 'New ' . ucfirst($this->handle_name) . ' has been added.');
    } catch (Exception $e) {
      return $e->getMessage();
      return redirect()->back()->with('error', $e->getMessage());
    }
  }
  public function update(UpdateRequest $request) {
    try {
      $data =$request->only([
         'name','college_name', 'college_location', 'college_district', 'college_address', 'funds_allocated', 'funds_received', 'work_progress',
       ]);
        $request->validate([
        'college_name' => 'required|string',
        'college_location' => 'required|string',
        'college_district' => 'required|string',
        'college_address' => 'required|string',
        'funds_allocated' => 'required|numeric',
        'funds_received' => 'required|numeric',
        'work_progress' => 'required|numeric|min:0|max:100',
      ]);
      $where = [
        'id' => $request->id
      ];
      Table::updateOrCreate($where, $data);

      return redirect()->back()->with('success', ucfirst($this->handle_name) . ' has been updated');
    } catch (Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }
  public function ajax(Request $request) {
    $edit_route = route('admin.' . $this->handle_name_plural . '.edit');
    $current_page = $request->page_number;
    if (isset($request->limit)) {
      $limit = $request->limit;
    } else {
      $limit = 10;
    }
    $offset = (($current_page - 1) * $limit);
    $modalObject = new Table();
    if (isset($request->string)) {
      $string = $request->string;
      $modalObject = $modalObject->where('name', 'like', "%" . $request->string . "%");
      // $modalObject = $modalObject->orWhere('name','like',"%".$request->string."%");
    }

    $all_trashed = $request->all_trashed;
    if ($all_trashed == "trashed") {
      $modalObject = $modalObject->onlyTrashed();
    }

    $total_records = $modalObject->count();
    $modalObject = $modalObject->offset($offset);
    $modalObject = $modalObject->take($limit);
    $data = $modalObject->get();

    if (isset($request->page_number) && $request->page_number != 1) {
      $page_number = $request->page_number + $limit - 1;
    } else {
      $page_number = 1;
    }
    $pagination = array(
      "offset" => $offset,
      "total_records" => $total_records,
      "item_per_page" => $limit,
      "total_pages" => ceil($total_records / $limit),
      "current_page" => $current_page,
    );

    return kview($this->handle_name_plural . '.ajax', compact('edit_route', 'data', 'page_number', 'limit', 'offset', 'pagination'));
  }
  public function delete(Request $request) {
    if (isset($request->action)) {
      $action = $request->action;
      $is_bulk = $request->is_bulk;
      $data_id = $request->data_id;
    }
    switch ($action) {
      case 'restore':
        try {
          if ($is_bulk == 1) {
            $data_id = explode(",", $data_id);
            $table = Table::onlyTrashed()->whereIn('id', $data_id);
            $table->restore();
            return 1;
          } else {
            $table = Table::onlyTrashed()->find($data_id);
            $table->restore();
            return 1;
          }
        } catch (Exception $e) {
          return redirect()->back()->with('error', $e->getMessage());
        }
        break;
      case 'trash':
        try {
          if ($is_bulk == 1) {
            $data_id = explode(",", $data_id);
            $table = Table::whereIn('id', $data_id);
            $table->delete();
            return 1;
          } else {
            $table = Table::find($data_id);
            $table->delete();
            return 1;
          }
        } catch (Exception $e) {
          return redirect()->back()->with('error', $e->getMessage());
        }
        break;
      case 'delete':
        try {
          if ($is_bulk == 1) {
            $data_id = explode(",", $data_id);
            $table = Table::withTrashed()->whereIn('id', $data_id)->get();
            foreach ($table as $tbl) {
              // $detach_relationship = $tbl->relationship()->detach();
              $tbl->forceDelete();
            }
            return 1;
          } else {
            $table = Table::withTrashed()->find($data_id);
            // $detach_relationship = $table->relationship()->detach();
            $data = $table->forceDelete();
            return 1;
          }
        } catch (Exception $e) {
          return redirect()->back()->with('error', $e->getMessage());
        }
        break;
      default:
        return 0;
    }
  }
}
