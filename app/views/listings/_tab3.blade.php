<div class="step-title">Thêm ảnh</div>
<div class="row">
  <div class="col-xs-12">
    <div class="form-group image-wrapper">
      <div><label>Upload ảnh</label></div>
      <div class="row">
        <div class="col-xs-2">
          <div class="add-image-wrapper" data-index=0>
            <a class="remove-image-link hidden" href="#"><span class="glyphicon glyphicon-remove"></span></a>
            <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
            <img src="" alt="" class="img-responsive hidden">
            <div class="hidden">
              <input type="text" name="image[0]">
            </div>
            </div>
        </div>
        <div class="col-xs-2">
          <div class="add-image-wrapper" data-index=1>
            <a class="remove-image-link hidden" href="#"><span class="glyphicon glyphicon-remove"></span></a>
            <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
            <img src="" alt="" class="img-responsive hidden">
            <div class="hidden">
              <input type="text" name="image[1]">
            </div>
            </div>
        </div>
        <div class="col-xs-2">
          <div class="add-image-wrapper" data-index=2>
            <a class="remove-image-link hidden" href="#"><span class="glyphicon glyphicon-remove"></span></a>
            <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
            <img src="" alt="" class="img-responsive hidden">
            <div class="hidden">
              <input type="text" name="image[2]">
            </div>
            </div>
        </div>
        <div class="col-xs-2">
          <div class="add-image-wrapper" data-index=3>
            <a class="remove-image-link hidden" href="#"><span class="glyphicon glyphicon-remove"></span></a>
            <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
            <img src="" alt="" class="img-responsive hidden">
            <div class="hidden">
              <input type="text" name="image[3]">
            </div>
            </div>
        </div>
        <div class="col-xs-2">
          <div class="add-image-wrapper" data-index=4>
            <a class="remove-image-link hidden" href="#"><span class="glyphicon glyphicon-remove"></span></a>
            <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
            <img src="" alt="" class="img-responsive hidden">
            <div class="hidden">
              <input type="text" name="image[4]">
            </div>
            </div>
        </div>
        <div class="col-xs-2">
          <div class="add-image-wrapper" data-index=5>
            <a class="remove-image-link hidden" href="#"><span class="glyphicon glyphicon-remove"></span></a>
            <a href="#attachment-modal" class="add-image-link">Thêm ảnh</a>
            <img src="" alt="" class="img-responsive hidden">
            <div class="hidden">
              <input type="text" name="image[5]">
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  var currentIndex;
  function previewImage(input) {
  }
  // trigger input file click event
  $('.add-image-wrapper').click(function (e) {
    if (!$(this).find('.remove-image-link').hasClass('hidden')) {
      return;
    }
    currentIndex = $(this).data('index');
    $('form.hidden input').trigger('click');
    e.preventDefault();
  });
  // trigger hidden from submit event
  $('form.hidden input').change(function (e) {
    $('form.hidden').trigger('submit');
  });
  // ADD IMAGE
  $('form.hidden').submit(function (e) {
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: '/images/tmp',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
          // step 1: update hidden file name input
          console.log(data.basename.substr(0, data.basename.length) + '.' + data.extension);
          $('input[name="image[' + currentIndex + ']"]').val(data.basename.substr(0, data.basename.length)
            + '.' + data.extension);
          // step 2: preview image
          $('.add-image-wrapper[data-index="' + currentIndex + '"] img').attr('src', '/tmp/' + data.basename
            + '_list.' + data.extension).removeClass('hidden');
          $('.add-image-wrapper[data-index="' + currentIndex + '"] a.add-image-link').addClass('hidden');
          // step 3: reset hidden file input value
          $('form.hidden input').val('');
          // step 4: show remove image link
          $('.add-image-wrapper[data-index="' + currentIndex + '"] .remove-image-link').removeClass('hidden');
          // step 5: color border
          $('.add-image-wrapper[data-index="' + currentIndex + '"]').addClass('uploaded');
        },
        cache: false,
        contentType: false,
        processData: false
    });
    e.preventDefault();
  });
  // REMOVE IMAGE
  $('.remove-image-link').click(function (e) {
    var that = this;
    $.ajax({
        url: '/images/tmp/' + $(that).parent().find('input').val(),
        type: 'DELETE',
        async: false,
        success: function (data) {
          // step 1: update hidden file name input
          $(that).parent().find('input').val('');
          // step 2: remove preview image
          $(that).parent().find('img').attr('src', '');
          // step 3: hide remove image link
          $(that).addClass('hidden');
          // step 4: show add image link
          $(that).parent().find('.add-image-link').removeClass('hidden');
          // step 5: uncolor border
          $(that).parent().removeClass('uploaded');
        },
        cache: false,
        contentType: false,
        processData: false
    });
    e.stopPropagation();
    e.preventDefault();
  });
</script>
