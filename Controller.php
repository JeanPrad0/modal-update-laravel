public function edit($id)
    {
        $client = $this->repository->find($id);

      // dd($client->getCity);


        return view('admin.clients.edit', compact('client'));


    }