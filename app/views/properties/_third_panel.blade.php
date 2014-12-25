<div class="panel panel-default">
  <div class="panel-heading">Vị trí</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-xs-6">
        <div class='form-group'>
          {{ Form::label('city', 'Tỉnh/ thành phố *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::select('city', $cities, null, array(
                'class' => 'form-control',
                'id' => 'city',
                'required' => true,
                'placeholder' => ''))}}
          </div>
        </div>

        <div class='form-group'>
          {{ Form::label('ward', 'Phường/ xã *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::select('ward', array(), null, array(
                'class' => 'form-control',
                'id' => 'ward',
                'required' => true,
                'placeholder' => ''))}}
          </div>
        </div>
      </div>

      <div class="col-xs-6">
        <div class='form-group'>
          {{ Form::label('district', 'Quận/ huyện *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::select('district', array(), null, array(
                'class' => 'form-control',
                'id' => 'district',
                'required' => true,
                'placeholder' => ''))}}
          </div>
        </div>

        <div class='form-group'>
          {{ Form::label('address', 'Địa chỉ *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('address', null, array(
                  'class' => 'form-control',
                  'id' => 'address',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function (e) {
    $('#city').change(function (e) {
      var that = this;
      $.ajax({
        url: '/cities/' + $(that).val() + '/districts'
      }).done(function (data) {
        // create options for districts
        el = '';
        for (var i = 0; i < data.length; i++) {
          el += '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
        }
        $('#district').html($(el));
      });
    });
    $('body').on('change', '#district', function (e) {
      var that = this;
      $.ajax({
        url: '/districts/' + $(that).val() + '/wards'
      }).done(function (data) {
        // create options for districts
        el = '';
        for (var i = 0; i < data.length; i++) {
          el += '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
        }
        $('#ward').html($(el));
      });
    });
  })
</script>