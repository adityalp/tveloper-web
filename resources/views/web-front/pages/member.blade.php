<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Join with us</h5>
      </div>
      <div class="modal-body">
        <form action="/member" method="POST" role="form">
          @csrf
          <input type="text" class="form-control mb-4" name="name" placeholder="fullname">
          <input type="text" class="form-control mb-4" name="email" placeholder="email">
          <input type="text" class="form-control mb-4" name="skill" placeholder="your skill">
          <input type="text" class="form-control mb-4" name="phone" placeholder="phone number">
          
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Accept</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    
</script>
