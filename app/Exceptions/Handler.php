<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Mail;
use Throwable;
use App\Mail\ErrorReport;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception) && $exception->getStatusCode() == 500) {
            // Hata detaylarını e-posta ile gönder
            $url = $request->fullUrl();
            $message = $exception->getMessage();
            $trace = $exception->getTraceAsString();

            Mail::to('atilturk@gmail.com')->send(new ErrorReport($url, $message, $trace));

            // Özel 500 hata sayfasını döndür
            return response()->view('errors.500', [], 500);
        }

        return parent::render($request, $exception);
    }
}
