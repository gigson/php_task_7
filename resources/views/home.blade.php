@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div>
                    <div class="panel-heading">One To One (User with Phone) using join</div>
                    <div>
                        <pre>
                            {{$one_to_one_joined}}
                        </pre>
                    </div>
                </div>

                <div>
                    <div class="panel-heading">One To One (User with Phone)</div>
                    <div>
                        <pre>
                            {{$one_to_one}}
                        </pre>
                    </div>
                </div>

                <div>
                    <div class="panel-heading">One To Many (User with Comments) using join</div>
                    <div>
                        <pre>
                            {{$one_to_many_joined}}
                        </pre>
                    </div>
                </div>

                <div>
                    <div class="panel-heading">One To Many (User with Comments)</div>
                    <div>
                        <pre>
                            {{$one_to_many}}
                        </pre>
                    </div>
                </div>

                <div>
                    <div class="panel-heading">Many To One (Comments with User) using join</div>
                    <div>
                        <pre>
                            {{$many_to_one_joined}}
                        </pre>
                    </div>
                </div>

                <div>
                    <div class="panel-heading">Many To One (Comments with User)</div>
                    <div>
                        <pre>
                            {{$many_to_one}}
                        </pre>
                    </div>
                </div>


                <div>
                    <div class="panel-heading">Many To Many (User with roles)</div>
                    <div>
                        <pre>
                            {{$many_to_many}}
                        </pre>
                    </div>
                </div>



            </div>
        </div>
@endsection
