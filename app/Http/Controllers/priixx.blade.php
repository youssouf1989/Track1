<div>
    {{--{!! Form::open(['url' => 'prix', 'class'=>'form-horizontal form-label-left']) !!}--}}
    {{ Form::open(['url' => ['prix/create', $produits->id], 'method' => 'post']) }}









    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pseudo">Produit <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">

            {{$produits->Designation}}



            {{--{!! Form::select('idProduit',$produits,null,['class'=>'form-control col-md-7 col-xs-12','name'=>'categorie1', 'id'=>'categorie1', 'data-parsley-id'=>'9303']) !!}--}}


            <ul class="parsley-errors-list" id="parsley-id-9303"></ul>
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomAgent">Prix HT<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12"  >

            {{-- <input type='text' class="form-control col-md-7 col-xs-12" id="idhortax"  Name='ht' onkeyup='CalculerMontantTTC();' Value='0'  >--}}
            {{Form::text('PrixHT',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>"idhortax" ,'onkeyup'=>'CalculerMontantTTC();','Value'=>'0'])}}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomAgent">Taux<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12"  >
            {{--<input type ='text' class="form-control col-md-7 col-xs-12" id="idtva" Name='tva' disabled>--}}
            {{Form::text('marge',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>"idtva" ])}}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomAgent">Prix TTC<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12"  >
            {{--<input type ='text' id="idttc" class="form-control col-md-7 col-xs-12" Name='ttc' disabled>--}}
            {{Form::text('PrixTTC',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>"idttc" ])}}

        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomAgent">Valeur<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12" id="div2" >
            {{Form::text('margeValeur',null,['class'=>'form-control col-md-7 col-xs-12' ,'id'=>'idvaleur' ])}}
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomAgent">Debut Promo<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12"  >

            {{-- <input type='text' class="form-control col-md-7 col-xs-12" id="idhortax"  Name='ht' onkeyup='CalculerMontantTTC();' Value='0'  >--}}
            {{Form::date('DateDebutPromo',null,['class'=>'form-control col-md-7 col-xs-12' ])}}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomAgent">Fin Promo<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12"  >

            {{-- <input type='text' class="form-control col-md-7 col-xs-12" id="idhortax"  Name='ht' onkeyup='CalculerMontantTTC();' Value='0'  >--}}
            {{Form::date('DateFinPromo',null,['class'=>'form-control col-md-7 col-xs-12' ])}}
        </div>
    </div>


    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">



            {!! Form::submit('Ajouter',['class'=>'btn btn-primary pull-right block ', 'id'=>'ajouter_btn']) !!}
            {!! Form::reset('Cancel',['class'=>'btn btn-default ']) !!}



        </div>
        {!! Form::close() !!}
    </div>



</div>









@if($errors->any())

    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
