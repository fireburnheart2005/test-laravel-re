<?php

class AreaController extends BaseController {
    public function districts($id)
    {
        $districts = District::where('city_id', '=', $id)->select(array('id', 'name'))->get();
        return Response::json($districts, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function wards($id)
    {
        $wards = Ward::where('district_id', '=', $id)->select(['id', 'name'])->get();
        return Response::json($wards, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
}