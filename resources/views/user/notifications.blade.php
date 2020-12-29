@extends('user.dashboard')

@section('dashboard_title') Notifications @stop

@section('dashbord_content')

       @for ($i = 1; $i < 10; $i++)

        <div class="notification border rounded p-2">
                <div class="card card-header text-black-50">
                    <div class="d-flex justify-content-between">
                        <a class="" data-toggle="collapse" href="#collapse-{{ $i }}" role="button" aria-expanded="false" aria-controls="collapse-{{ $i }}">
                            <div><i class="fa fa-bell icon-notif text-success mr-2"></i>Notification N°{{ $i }} du 29/12/2020</div>
                        </a>
                        <div>
                            <a class="text-danger" href="#"><i class="far fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            <div class="collapse" id="collapse-{{ $i }}">
                <div class="card card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet animi facere cum ab, culpa officiis facilis laboriosam iste quisquam ipsum deleniti tempora porro cupiditate assumenda labore eius voluptate dignissimos reiciendis.
                    Accusantium sunt libero sed ad eius fugiat vero expedita veniam, nisi sit commodi vel mollitia est veritatis possimus reprehenderit consequatur. Aut quod omnis, qui at iusto veniam vitae dolores beatae?
                    Cumque id optio iusto, doloribus dolor odio aperiam, dolore totam et ullam vitae deleniti sapiente! Neque mollitia vitae reprehenderit sit eveniet eos placeat saepe atque commodi, asperiores nulla, provident blanditiis.
                </div>
            </div>
       </div>
           
       @endfor


@endsection