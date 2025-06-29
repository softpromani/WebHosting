{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scheduleModal">
  Schedule Appointment
</button> --}}

<!-- Modal -->
<div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{route('schedule.submit')}}" method="POST">
      @csrf
      <input type="text" name="website" style="display: none">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="scheduleModalLabel">Submit Schedule</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="phone_number" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="mb-3">
            <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="schedule_date" required>
          </div>

          <div class="mb-3">
            <label for="time" class="form-label">Time <span class="text-danger">*</span></label>
            <input type="time" class="form-control" name="schedule_time" required>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
            <textarea class="form-control" name="user_message" rows="3" required></textarea>
          </div>


            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="captcha">Captcha</label>
                        <input type="text" class="form-control" name="captcha">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Click on image for refresh</label>
                        <img src="{{ captcha_src() }}" onclick="this.src='{{ captcha_src() }}?'+Math.random()" style="cursor:pointer;">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
