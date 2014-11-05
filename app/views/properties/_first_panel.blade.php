<div class="panel panel-default">
  <div class="panel-heading">Thông tin bất động sản</div>
  <div class="panel-body">
    <div class='form-group'>
      {{ Form::label('title', 'Tiêu đề *', array('class' => 'col-xs-2 control-label')) }}
      <div class="col-xs-10">
        {{ Form::text('title', null, array(
              'class' => 'form-control',
              'id' => 'title',
              'required' => true,
              'placeholder' => ''))}}
      </div>
    </div>
    <div class='form-group'>
      {{ Form::label('description', 'Mô tả *', array('class' => 'col-xs-2 control-label')) }}
      <div class="col-xs-10">
        {{ Form::textarea('description', null, array(
              'class' => 'form-control',
              'id' => 'description',
              'required' => true,
              'placeholder' => ''))}}
      </div>
    </div>
  </div>
</div>