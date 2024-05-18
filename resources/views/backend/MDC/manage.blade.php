@extends($app_layout)
@section('content')
<div class="container page-container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
      @endif
      @if(session('error'))
      <div class="alert alert-danger">
        {{session('error')}}
      </div>
      @endif
    </div>

    <div class="col-md-12 form_page">
      <div class="card">
        <div class="card-body">
          <form action="{{ $form_action }}" class="" method="post">
            @csrf
            @if($edit)
            <input type="hidden" value="{{$data->id}}" name="id">
            @endif

            <div class="row form_sec">
              <div class="col-12">
                <h5>Basic Details</h5>
              </div>
            </div>
            <div class="row">


            {{-- Form with Bootstrap classes --}}


            <div class="form-group row">
              <label for="name" class="col-sm-3 col-form-label">Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter name" required>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            
              {{-- College Name --}}
              <div class="form-group row">
                <label for="college_name" class="col-sm-3 col-form-label">College Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('college_name') is-invalid @enderror" name="college_name" id="college_name" placeholder="Enter college name" required>
                  @error('college_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- College Location --}}
              <div class="form-group row">
                <label for="college_location" class="col-sm-3 col-form-label">Location:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('college_location') is-invalid @enderror" name="college_location" id="college_location" placeholder="Enter location" required>
                  @error('college_location')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- District --}}
              <div class="form-group row">
                <label for="college_district" class="col-sm-3 col-form-label">District:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('college_district') is-invalid @enderror" name="college_district" id="college_district" placeholder="Enter district" required>
                  @error('college_district')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- Address --}}
              <div class="form-group row">
                <label for="college_address" class="col-sm-3 col-form-label">Address:</label>
                <div class="col-sm-9">
                  <textarea class="form-control @error('college_address') is-invalid @enderror" name="college_address" id="college_address" placeholder="Enter address" rows="3" required></textarea>
                  @error('college_address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              
              {{-- Funds Allocated --}}
              <div class="form-group row">
                <label for="funds_allocated" class="col-sm-3 col-form-label">Funds Allocated:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control @error('funds_allocated') is-invalid @enderror" name="funds_allocated" id="funds_allocated" placeholder="Enter allocated funds" step="0.01" required>
                  @error('funds_allocated')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- Funds Received --}}
              <div class="form-group row">
                <label for="funds_received" class="col-sm-3 col-form-label">Funds Received:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control @error('funds_received') is-invalid @enderror" name="funds_received" id="funds_received" placeholder="Enter received funds" step="0.01" required>
                  @error('funds_received')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- Work Progress Bar with Percentage Display --}}
            <div class="form-group row">
              <label for="work_progress" class="col-sm-3 col-form-label">Work Progress:</label>
              <div class="col-sm-9">
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="workProgressBar" style="width: 0%">
                    <span id="workProgressValue">0%</span>
                  </div>
                </div>
                <input type="range" class="form-control-range" name="work_progress" id="work_progress" min="0" max="100" value="0" oninput="updateProgress(this.value)">
              </div>
            </div>
            
            <div>
            {{-- Submit Button --}}
            <div class="form-group row">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            </div>

            </form>

            {{-- Script for Updating Progress Bar Percentage --}}
            <script>
              function updateProgress(value) {
                const progressBar = document.getElementById('workProgressBar');
                const progressValue = document.getElementById('workProgressValue');

                progressBar.style.width = `${value}%`;
                progressValue.textContent = `${value}%`;
              }
            </script>

              
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <button type="submit" class="btn k-btn k-btn-primary add_site">
                    @if($edit)
                    Update
                    @else
                    Add
                    @endif
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection