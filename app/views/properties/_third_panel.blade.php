<div class="panel panel-default">
  <div class="panel-heading">Vị trí</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-xs-6">
        <div class='form-group'>
          {{ Form::label('city', 'Tỉnh/ thành phố *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::select('city', array(), null, array(
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