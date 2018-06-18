<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style type="text/css" media="screen">
      .list-group {
        overflow-y: scroll;
        height: 250px; 
      }
    </style>
</head>
<body>

  <div class="container" id="app">
    <div class=" col-md-4 offset-md-4">
      <li class="list-group-item active">Chat room</li>
      <ul class="list-group" v-chat-scroll>
        <message
        v-for="value,index in chat.message"
        :color=chat.color[index]
        :key=value.index
        :user=chat.user[index]
        >
          @{{ value }}
        </message>
      </ul>
      <input type="text" v-model="message" @keyup.enter="send" class="form-control" placeholder="Type your message here...">
    </div>
    
  </div>
  <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>