<?php

namespace Api\Client\Exceptions;

use Exception;

class ClientNotFoundException extends Exception {

    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report() {
        return false;
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception) {
        return response()->json(['error' => $exception->getMessage()], 404);
    }
}