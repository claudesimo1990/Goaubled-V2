<div class="container-fluid h-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-4 col-xl-3 chat">
            <div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." name="" class="form-control search">
                        <div class="input-group-prepend">
                            <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card-body contacts_body">
                    <ui class="contacts">
                        @forelse($contacts as $user)
                            @if($user->id != $logUser->id)
                                <li class="active itemclass" wire:click="findUser({{$user->id}})">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{$user->avatar}}" class="rounded-circle user_img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>{{$user->name}}</span>
                                            <p>{{$user->name}} est en ligne</p>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @empty
                            <span>pas de Tchat</span>
                        @endforelse
                    </ui>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-md-8 col-xl-6 chat">
            <div class="card">
                @if(count($messages) > 0)
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img src="{{$fromUser['avatar']}}"
                                     class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span>Chat avec {{$fromUser['name']}}</span>
                                <p>{{count($messages)}} Messages</p>
                            </div>
                        </div>
                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="action_menu">
                            <ul>
                                <li><i class="fas fa-user-circle"></i> View profile</li>
                                <li><i class="fas fa-users"></i> Add to close friends</li>
                                <li><i class="fas fa-plus"></i> Add to group</li>
                                <li><i class="fas fa-ban"></i> Block</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body msg_card_body">
                        @forelse($messages as $message)
                            @if($message->user_id != $logUser->id)
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{$logUser->avatar}}"
                                         class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    <div class="text-message">{{$message->content}}</div>
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                           @else
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    <div class="text-message">{{$message->content}}</div>
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{$fromUser['avatar']}}"
                                        class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            @endif
                        @empty
                            <div class="w-100 h-100">
                                <h5 class="text-white text-center mt-5">Pas de messages retrouves</h5>
                            </div>
                        @endforelse
                        <div class="card-footer">
                            <div class="input-group">
                                <div class="input-group-append">
                                        <span class="input-group-text attach_btn"><i
                                                class="fas fa-paperclip"></i></span>
                                </div>
                                <textarea name="" class="form-control type_msg"
                                          placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                        <span class="input-group-text send_btn"><i
                                                class="fas fa-location-arrow"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="w-100 h-100">
                        <h5 class="text-white text-center mt-5">Pas de messages retrouves</h5>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
