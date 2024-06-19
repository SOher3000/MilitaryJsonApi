<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Military;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="Military API", version="1.0")
 * @OA\PathItem(path="/api/military")
 */
class MilitaryController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/military",
     *     summary="Get list of military items",
     *     @OA\Response(response="200", description="List of military items")
     * )
     */
    public function index(Request $request)
    {
        $query = Military::query();

        if ($request->has('name')) {
            $query->where('name', $request->input('name'));
        }

        if ($request->has('country')) {
            $query->where('country', $request->input('country'));
        }

        if ($request->has('type')) {
            $query->where('type', $request->input('type'));
        }

        if ($request->has('quantity')) {
            $query->where('quantity', $request->input('quantity'));
        }

        if ($request->has('used_in')) {
            $query->whereJsonContains('used_in', $request->input('used_in'));
        }

        if ($request->has('selling_in')) {
            $query->whereJsonContains('selling_in', $request->input('selling_in'));
        }

        if ($request->has('destroyed')) {
            $query->where('destroyed', $request->input('destroyed'));
        }

        if ($request->has('effective')) {
            $query->where('effective', $request->input('effective'));
        }

        $military = $query->paginate(10);

        return response()->json($military);
    }

    /**
     * @OA\Get(
     *     path="/api/military/{id}",
     *     summary="Get a specific military item",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response="200", description="Military item details"),
     *     @OA\Response(response="404", description="Record not found")
     * )
     */
    public function show($id)
    {
        $military = Military::find($id);

        if ($military) {
            return response()->json($military);
        } else {
            return response()->json(['message' => 'Record not found'], 404);
        }
    }
}
