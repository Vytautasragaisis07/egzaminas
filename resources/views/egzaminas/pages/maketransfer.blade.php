@extends('egzaminas/main')

@section('content')
		<div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Atlikti pavedimą</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/store_transfer" enctype="multipart/form-data" class="p-5 bg-white">
                        @csrf
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="nr_account">Sąskaitos numeris</label>
								<select class="form-control" name="nr_account" >
                                    @foreach($accounts as $account)
                                        <option value="{{$account->nr_account}}">{{$account->nr_account}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Aprašymas</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="price">Suma</label>
                                <input type="number" id="sum" name="sum" class="form-control">
                            </div>
							<div class="col-md-12">
                                <label class="text-black" for="name">Vardas</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="row justify-content-center mt-5">
                                <input type="submit" value="Atlikti pavedimą" name="submit" class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@stop
