<div class="panel panel-default">
  <div class="panel-heading">Thông tin bất động sản</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-xs-6">
        <div class='form-group'>
          {{ Form::label('contact_name', 'Tên liên hệ *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('contact_name', null, array(
                  'class' => 'form-control',
                  'id' => 'contact_name',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
        <div class='form-group'>
          {{ Form::label('contact_tel', 'Điện thoại bàn', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('contact_tel', null, array(
                  'class' => 'form-control',
                  'id' => 'contact_tel',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class='form-group'>
          {{ Form::label('contact_mobile', 'Di động *', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('contact_mobile', null, array(
                  'class' => 'form-control',
                  'id' => 'contact_mobile',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
        <div class='form-group'>
          {{ Form::label('contact_email', 'Email', array('class' => 'col-xs-4 control-label')) }}
          <div class="col-xs-8">
            {{ Form::text('contact_email', null, array(
                  'class' => 'form-control',
                  'id' => 'contact_email',
                  'required' => true,
                  'placeholder' => ''))}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>