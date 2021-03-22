<!DOCTYPE html>
<html>

<head>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/vue@next"></script>
  <title></title>
  <script>
    var ajax = new XMLHttpRequest();
    ajax.open('GET', '/departments', false);
    ajax.send();
    alert(ajax.responseText);
  </script>
</head>

<body class="bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 ">
  <!-- <div class="bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500"> -->
  <div class="grid grid-cols-12 mt-3 ml-3">
    <div><img src="/images/logo.png"></div>
    <div class="col-span-9"></div>
    <div>User</div>
  </div>
  <div class="grid-cols-8 mt-4">

    <div id="dashBoard" class="ml-3 my-2">
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Dash Board</button>
    </div>
    <div class="col-span-7"></div>

    <div id="empManagement" class="ml-3 my-2">
      <button @click="loadEm" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Employee Management</button>
    </div>
    <div class="col-span-7"></div>

    <div id="sysManagement" class="ml-3 my-2">
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">System Management</button>
    </div>
    <div class="col-span-7"></div>

    <div id="usrManagement" class="ml-3 my-2">
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">User Management</button>
    </div>
    <div class="col-span-7"></div>

  </div>
  <!-- </div> -->
</body>
<script type="text/javascript">
  const EventHandling = {
    data() {
      return {
        message: 'Hello Vue.js!'
      }
    },
    methods: {
      loadEm() {
        window.location.href = "/loadEm";
      }
    }
  }

  Vue.createApp(EventHandling).mount('#empManagement')
</script>

</html>