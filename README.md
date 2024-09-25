GET|HEAD        api/user ...................................................
  GET|HEAD        api/users ............... users.index › UserController@index
  POST            api/users ............... users.store › UserController@store
  GET|HEAD        api/users/create ...... users.create › UserController@create
  GET|HEAD        api/users/{user} .......... users.show › UserController@show
  PUT|PATCH       api/users/{user} ...... users.update › UserController@update
  DELETE          api/users/{user} .... users.destroy › UserController@destroy
  GET|HEAD        api/users/{user}/edit ..... users.edit › UserController@edit
  GET|HEAD        barang ............... barang.index › BarangController@index
  POST            barang ............... barang.store › BarangController@store
  GET|HEAD        barang/create ...... barang.create › BarangController@create
  GET|HEAD        barang/{barangId}/mutasi . MutasiController@showMutasiBarang
  GET|HEAD        barang/{barang} ........ barang.show › BarangController@show
  PUT|PATCH       barang/{barang} .... barang.update › BarangController@update
  DELETE          barang/{barang} .. barang.destroy › BarangController@destroy
  GET|HEAD        barang/{barang}/edit ... barang.edit › BarangController@edit
  GET|HEAD        mutasi ............... mutasi.index › MutasiController@index
  POST            mutasi ............... mutasi.store › MutasiController@store
  GET|HEAD        mutasi/create ...... mutasi.create › MutasiController@create
  GET|HEAD        mutasi/{mutasi} ........ mutasi.show › MutasiController@show
  PUT|PATCH       mutasi/{mutasi} .... mutasi.update › MutasiController@update
  DELETE          mutasi/{mutasi} .. mutasi.destroy › MutasiController@destroy
  GET|HEAD        mutasi/{mutasi}/edit ... mutasi.edit › MutasiController@edit
