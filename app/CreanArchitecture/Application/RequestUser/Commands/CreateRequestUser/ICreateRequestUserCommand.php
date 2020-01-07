<?php


namespace App\CreanArchitecture\Application\RequestUser\Commands\CreateRequestUser;


interface ICreateRequestUserCommand
{
    public function execute(RequestUserInfoModel $model):void;
}
