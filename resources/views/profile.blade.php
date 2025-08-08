

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
@include('navbar')
<div class="d-flex">
    @include('sidebar')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-pink text-white fw-bold fs-5">Profile</div>
                    <div class="card-body position-relative">
                        <!-- Edit Profile Button -->
                        <button type="button" class="btn btn-outline-pink position-absolute end-0 top-0 mt-3 me-3" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                            Edit Profile
                        </button>
                        <!-- Edit Profile Modal -->
                        <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title fw-bold" id="editProfileModalLabel">Edit Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="mb-3">
                                    <label for="editName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="editName" value="Username">
                                  </div>
                                  <div class="mb-3">
                                    <label for="editIdNumber" class="form-label">ID Number</label>
                                    <input type="text" class="form-control" id="editIdNumber" value="">
                                  </div>
                                  <div class="mb-3">
                                    <label for="editYearLevel" class="form-label">Year Level</label>
                                    <select class="form-select" id="editYearLevel">
                                      <option selected disabled>Select year level</option>
                                      <option>1st Year</option>
                                      <option>2nd Year</option>
                                      <option>3rd Year</option>
                                      <option>4th Year</option>
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label for="editCourse" class="form-label">Course</label>
                                    <input type="text" class="form-control" id="editCourse" value="">
                                  </div>
                                  <div class="mb-3">
                                    <label for="editEmail" class="form-label">LCCDO Email</label>
                                    <input type="email" class="form-control" id="editEmail" value="user@lccdo.edu.ph">
                                  </div>
                                  <div class="mb-3">
                                    <label for="editGender" class="form-label">Gender</label>
                                    <select class="form-select" id="editGender">
                                      <option selected disabled>Select gender</option>
                                      <option>Male</option>
                                      <option>Female</option>
                                      <option>Other</option>
                                    </select>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-pink">Save</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="me-4">
                                <i class="bi bi-person-circle" style="font-size: 4rem;"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-1">Username</h4>
                                <p class="mb-0 text-muted">user@lccdo.edu.ph</p>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <div>Username</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <div>user@lccdo.edu.ph</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Member Since</label>
                            <div>August 7, 2025</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





