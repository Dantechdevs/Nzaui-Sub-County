@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">

              <div>
                <img class="wd-100 rounded-circle" src="{{(!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) :url('upload/no_image.jpg')}}" alt="profile">
                <span class="h4 ms-3">{{ $profileData->name }}</span>
              </div>

              <div class="dropdown">


                </a>

              </div>
            </div>

            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
              <p class="text-muted">{{ $profileData->name}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{ $profileData->email}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
              <p class="text-muted">{{ $profileData->phone}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
              <p class="text-muted">{{ $profileData->address}}</p>
            </div>
            <div class="mt-3 d-flex social-links">
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="github"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="twitter"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          <div class="card">
            <div class="card-body">

              <h6 class="card-title">Update Admin Profile</h6>

              <form action="{{ route('admin.change.password') }}" method="POST">
                @csrf
                <div>
                    <label for="current_password">Current Password</label>
                    <input type="password" name="current_password" required>
                </div>
                <div>
                    <label for="new_password">New Password</label>
                    <input type="password" name="new_password" required>
                </div>
                <div>
                    <label for="new_password_confirmation">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" required>
                </div>
                <button type="submit">Change Password</button>
            </form>


            </div>
          </div>
                    <div class="ms-2">

                    </div>
                  </div>




                    </div>
                  </div>
                </div>
              </div>

              </div>
              <div class="card-footer">


                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">


                  </div>
                  <div class="dropdown">

                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

              </div>

                </div>
      </div>
      <!-- middle wrapper end -->
      <!-- right wrapper start -->

      <!-- right wrapper end -->
    </div>

     </div>

@endsection
