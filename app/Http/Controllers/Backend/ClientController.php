<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Traits\ImageTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/client';

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $clients = Client::orderBy('position', 'ASC')->get();
        return view('backend.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $client = new Client();
        return view('backend.clients.add', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest $request
     * @return RedirectResponse
     */
    public function store(ClientRequest $request): RedirectResponse
    {
        $image = $this->saveOriginalImage($request->image);
        Client::create($request->validated() + [
                'image' => $image
            ]);

        return redirect()->route('clients.index')->with('success', 'Client Added Successfully!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     * @return View|Factory|Application
     */
    public function edit(Client $client): View|Factory|Application
    {
        return view('backend.clients.edit', compact('client'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ClientRequest $request
     * @param Client $client
     * @return RedirectResponse
     */
    public function update(ClientRequest $request, Client $client): RedirectResponse
    {
        $image = $client->image;
        if (isset($request->image)) {
            $this->deleteImage($this->image_path . '/' . $client->image);
            $image = $this->saveOriginalImage($request->image);
        }
        $client->update($request->validated() + [
                'image' => $image
            ]);

        return redirect()->route('clients.index')->with('success', 'Client Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return RedirectResponse
     */
    public function destroy(Client $client): RedirectResponse
    {
        $this->deleteImage($this->image_path . '/' . $client->image);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client Deleted Successfully!!!');
    }
}
