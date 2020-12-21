<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h3 class="text-center">My Task ({{$totalTasks}})</h3>
   
          <table class="table bg-white">
              <thead>
                  <tr>
                      <th>id</th>
                      <th>Title</th>
                      <th>Status</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($tasks as $task)
                     <tr>
                         <td scope="row">{{$task->id}}</td>
                         <td>{{$task->title}}</td>
                         <td>{{$task->status ==true?'Completed':'Pending'}}</td>
                     </tr>
                  @endforeach
              </tbody>
          </table>
          {{$tasks->links()}}
</div>
