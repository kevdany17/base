<?php

namespace App\Traits;

use App\Enums\HttpCode;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;

trait JsonRespondController
{
    /**
     * @var int
     */
    protected $httpStatusCode = HttpCode::OK;

    /**
     * @var int
     */
    protected $errorCode;

    /**
     * Get HTTP status code of the response.
     *
     * @return int
     */
    public function getHTTPStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * Set HTTP status code of the response.
     *
     * @param  int  $statusCode
     * @return self
     */
    public function setHTTPStatusCode($statusCode)
    {
        $this->httpStatusCode = $statusCode;

        return $this;
    }

    /**
     * Get error code of the response.
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set error code of the response.
     *
     * @param  int  $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }


    /**
     * Sends a JSON to the consumer.
     *
     * @param  array  $data
     * @param  array  $headers  [description]
     * @return JsonResponse
     */
    public function respond($data, $headers = [])
    {
        return response()->json($data, $this->getHTTPStatusCode(), $headers);
    }

    /**
     * Sends a response not found (404) to the request.
     * Error Code = 31.
     *
     * @return JsonResponse
     */
    public function respondNotFound($message = null)
    {
        return $this->setHTTPStatusCode(HttpCode::NOT_FOUND)
            ->setErrorCode(31)
            ->respondWithError($message);
    }

    /**
     * Sends an error when the validator failed.
     * Error Code = 32.
     *
     * @param  Validator  $validator
     * @return JsonResponse
     */
    public function respondValidatorFailed(Validator $validator)
    {
        return $this->setHTTPStatusCode(HttpCode::UNPROCESSABLE_ENTITY)
            ->setErrorCode(32)
            ->respondWithError($validator->errors()->all());
    }

    /**
     * Sends an error when the query didn't have the right parameters for
     * creating an object.
     * Error Code = 33.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function respondNotTheRightParameters($message = null)
    {
        return $this->setHTTPStatusCode(HttpCode::INTERNAL_SERVER_ERROR)
            ->setErrorCode(33)
            ->respondWithError($message);
    }

    /**
     * Sends a response invalid query (http 500) to the request.
     * Error Code = 35.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function respondInvalidQuery($message = null)
    {
        return $this->setHTTPStatusCode(HttpCode::INTERNAL_SERVER_ERROR)
            ->setErrorCode(35)
            ->respondWithError($message);
    }

    /**
     * Sends an error when the query contains invalid parameters.
     * Error Code = 36.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function respondInvalidParameters($message = null)
    {
        return $this->setHTTPStatusCode(HttpCode::UNPROCESSABLE_ENTITY)
            ->setErrorCode(36)
            ->respondWithError($message);
    }

    /**
     * Sends a response unauthorized (401) to the request.
     * Error Code = 37.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function respondUnauthorized($message = null)
    {
        return $this->setHTTPStatusCode(HttpCode::UNAUTHORIZED)
            ->setErrorCode(37)
            ->respondWithError($message);
    }

    /**
     * Sends a response invalid header (403) to the request.
     * Error Code = 38.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function respondInvalidHeader($message = null)
    {
        return $this->setHTTPStatusCode(HttpCode::FORBIDDEN)
            ->setErrorCode(38)
            ->respondWithError($message);
    }

    public function respondInternalError($message = null)
    {
        return $this->setHTTPStatusCode(HttpCode::INTERNAL_SERVER_ERROR)
            ->setErrorCode(39)
            ->respondWithError($message);
    }

    /**
     * Sends a response with error.
     *
     * @param  string|array  $message
     * @return JsonResponse
     */
    public function respondWithError($message = null)
    {
        return $this->respond([
            'error' => [
                'message' => $message ?? config('api.error_codes.' . $this->getErrorCode()),
                'error_code' => $this->getErrorCode()
            ],
        ]);
    }

    public function respondMessage($message = null, $data = null)
    {
        return $this->respond([
            'message' => $message ?? null,
            'data' => $data ?? null,
        ]);
    }

    /**
     * Sends a response that the object has been deleted, and also indicates
     * the id of the object that has been deleted.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function respondObjectDeleted($id)
    {
        return $this->respond([
            'deleted' => true,
            'id' => $id,
        ]);
    }
}
