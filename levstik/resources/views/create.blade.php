@extends('layout')

@section('content')
    <h1 class="title">Nov Levstikov nagrajenec</h1>

    <form method="POST" action="/nagrajenci" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="field is-horizontal">
            <div class="field-label is-normal">
            <label class="label">Ime in priimek nagrajenca</label>
            </div>
            <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                <input class="input" type="text" placeholder="Ime in priimek" name="full_name">
                </p>
            </div>
            
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Leto prejema nagrade</label>
            </div>
            <div class="field-body">
                <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" placeholder="YYYY" name="year">
                </p>
                </div>
                
            </div>
            </div>
        </div>
    

                <div class="field is-horizontal">
                        <div class="field-label is-normal">
                                <div class="file has-sname is-risght">
                                        <label class="file-label2">
                                            Slika osebe</label>
                                        <input class="file-input2" type="file" name="image1">
                                    </div>
            </div></div>

                <div class="field is-horizontal">
                        <div class="field-label is-normal">
                                <div class="file has-sname is-risght">
                                        <label class="file-label2">
                                               Slika aleje</label>
                                          <input class="file-input2" type="file" name="image2">
                                      </div>
            </div></div>

        
        <div class="field is-horizontal">
            <div class="field-label is-normal">
            <label class="label">Kratek opis - Slovenščina</label>
            </div>
            <div class="field-body">
            <div class="field">
                <div class="control">
                <textarea class="textarea" name="short_info" placeholder="Explain how we can help you"></textarea>
                </div>
            </div>
            </div>
        </div>


        <div class="field is-horizontal">
            <div class="field-label is-normal">
            <label class="label">Kratek opis - Angleščina</label>
            </div>
            <div class="field-body">
            <div class="field">
                <div class="control">
                <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                </div>
            </div>
            </div>
        </div>


        <div class="field is-horizontal">
            <div class="field-label is-normal">
            <label class="label">Kratek opis - Kitajščina</label>
            </div>
            <div class="field-body">
            <div class="field">
                <div class="control">
                <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                </div>
            </div>
            </div>
        </div>



        <div class="field is-horizontal">
            <div class="field-label is-normal">
            <label class="label">Podroben opis - Slovenščina</label>
            </div>
            <div class="field-body">
            <div class="field">
                <div class="control">
                <textarea class="textarea" name="description" placeholder="Explain how we can help you"></textarea>
                </div>
            </div>
            </div>
        </div>


        <div class="field is-horizontal">
            <div class="field-label is-normal">
            <label class="label">Podroben opis - Angleščina</label>
            </div>
            <div class="field-body">
            <div class="field">
                <div class="control">
                <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                </div>
            </div>
            </div>
        </div>


        <div class="field is-horizontal">
            <div class="field-label is-normal">
            <label class="label">Podroben opis - Kitajščina</label>
            </div>
            <div class="field-body">
            <div class="field">
                <div class="control">
                <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                </div>
            </div>
            </div>
        </div>
        
        <div class="field is-horizontal">
            <div class="field-label">
            <!-- Left empty for spacing -->
            </div>
            <div class="field-body">
            <div class="field">
                <div class="control">
                <button class="button is-primary" type="submit">
                    Shrani
                </button>
                </div>
            </div>
            </div>
        </div>
        
    </form>


    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
    </ul>


@endsection

@section('title')
    Nagrajenci
@endsection