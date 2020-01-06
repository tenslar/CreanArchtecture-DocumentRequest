<?php

namespace App\CreanArchitecture\Application\RequestUser\Commands;


use App\CreanArchitecture\Application\RequestUser\Commands\CreateRequestUser\RequestUserInfo;

class CreateRequestUserCommand
{
    public function __construct()
    {
    }

    public function execute(RequestUserInfo $model)
    {
        // TODO $modelからDomainを生成

        // TODO FactoryでUserDomainを作成
        $requestUser = $this->requestUserFactory->create(

        );

        // TODO Userを登録
        $this->database->requestUser->add();
        $this->database->save();

        // TODO サポートに請求を通知
        $this->customerSupport->notifyDocumentRequest();

    }
}
