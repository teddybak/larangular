<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Builder;
/**
 * @OA\Get(
 *     path="/api/v1/builders",
 *     @OA\Response(
 *          response=200,
 *          description="Success: List all Builders",
 *     ),
 *    @OA\Schema(ref="#/definitions/Builder"),
 *    @OA\Response(
 *          response="404",
 *          description="Not Found"
 *      )
 *
 * )
 */

class BuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBuilder = Builder::all();
        return $listBuilder;
     }


    /**
     * @OA\Post(
     * path="/api/v1/builders",
     * summary="create a builder",
     * description="Json format",
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"name","description", "location"},
     *       @OA\Property(property="name", type="string", format="string" ),
     *       @OA\Property(property="description", type="string", format="string" ),
     *       @OA\Property(property="location", type="string" ),
     *    ),
     * ),
     * @OA\Response(
     *    response=201,
     *    description="Success: A Newly Created Builder",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function store(Request $request)
    {
        $createBuilder = Builder::create($request->all());
        return $createBuilder;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showBuilderById = Builder::with('Bike')->findOrFail($id);
        return $showBuilderById;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateBuilderById = Builder::findOrFail($id);
        $updateBuilderById->update($request->all());
        return $updateBuilderById;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteBikeById = Bike::find($id)->delete();
        return response()->json([], 204);
    }
}
