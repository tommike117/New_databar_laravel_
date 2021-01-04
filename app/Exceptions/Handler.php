<?php

namespace App\Exceptions;
use App;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use DB;
use App\Mail\SendMailErrorPage;
use Illuminate\Support\Facades\Mail;

class Handler extends ExceptionHandler
{

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        // if ($exception instanceof CustomException) {
        //     //
        //     dd('Error');
        // }
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($this->isHttpException($exception)) {

            $emails = ['khritsanaphong.f@databar.co.th','piyapat.t@databar.co.th'];

            if ($exception->getStatusCode() == 404) {

                // dd($request);
                // Mail::to($emails)
                // ->send(new SendMailErrorPage ($request->path()));

                return response()->view('errors.' . '404', [], 404);
            }

            if ($exception->getStatusCode() == 500) {

                // Mail::to($emails)
                // ->send(new SendMailErrorPage ($request->path()));

                return response()->view('errors.' . '500', [], 500);
            }
        }
        // abort(404);
        // if ($exception != null) {

        //     dd($request);
        //     return response()->view('errors.custom', []);
        // }
        return parent::render($request, $exception);
    }


}
