<?php

namespace Application\Resources;

use Hamlet\Http\Entities\PlainTextEntity;
use Hamlet\Http\Requests\Request;
use Hamlet\Http\Resources\HttpResource;
use Hamlet\Http\Responses\MethodNotAllowedResponse;
use Hamlet\Http\Responses\Response;
use Hamlet\Http\Responses\SimpleOKResponse;

class UserResource implements HttpResource
{
    public function getResponse(Request $request): Response
    {
        if ($request->getMethod() == 'POST') {
            $entity = new PlainTextEntity('');
            return new SimpleOKResponse($entity);
        } else {
            return new MethodNotAllowedResponse('POST');
        }
    }
}
