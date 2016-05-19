@extends('GestionClients.app')
@section('content')


    <div class="  col-md-offset-1" >
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h1>Modifier:  {!! $client->nom !!}</h1>
            </div><!-- /.box-header -->
            <div class="box-body">




                {!!Form::model($client,[
                        'method'=>'PATCH',
                        'action' =>['ClientController@update',$client->clientID]
                        ]) !!}



                <div class="form-group">
                    {!! Form::label('nom' ,'Nom:') !!}
                    {!! Form::text('nom', null , ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('prenom' ,'Prenom:') !!}
                    {!! Form::text('prenom', null , ['class'=>'form-control']) !!}
                </div>
                <div class="form-group has-success" >
                    {!! Form::label('email' ,'Email:') !!}

                    {!! Form::email('email', null , ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('telMobile' ,'Mobile') !!}
                    {!! Form::text('telMobile', null , ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('raisonSociale' ,'raison sociale') !!}
                    {!! Form::text('raisonSociale', null , ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('civilite' ,'Civilite : ') !!}
                    {!! Form::select('civilite', array('   '=>'','M.'=>'M.','Mme'=>'Mme','Mlle'=>'Mlle')) !!}


                </div>

                <div class="form-group">
                    {!! Form::label('identifiant' ,'Identifiant : ') !!}
                    {!! Form::text('identifiant',  null , ['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('motDePasse' ,'mot de passe : ') !!}
                    {!! Form::password('motDePasse',  null , ['class'=>'form-control']) !!}

                </div>





                <div class="form-group" >



                    {!! Form::submit('Modifier',['class'=>'btn btn-success btn-sm ']) !!}



                </div>




                {!! Form::close() !!}

                @if($errors->any())

                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach

                    </ul>

                @endif

            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>

    <div class="col-md-1"></div>




@stop