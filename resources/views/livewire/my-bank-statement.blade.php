<div class="pt-4">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" class="text-center">Fisrt Name</th>
            <th scope="col" class="text-center">Last Name</th>
            <th scope="col" class="text-center">Email</th>
            <th scope="col" class="text-center">Payment Method</th>
            <th scope="col" class="text-center">Payment status</th>
            <th scope="col" class="text-center">Created_at</th>
          </tr>
        </thead>
        <tbody>
       
            <tr>
                <td class="text-center">{{ $user->first_name }} </td>
                <td class="text-center">{{ $user->last_name }} </td>
                <td class="text-center">{{ $user->email }} </td>
                <td class="text-center">{{ $user->method ? $user->method->method : 'Not Set Yet' }}</td>
                <td class="text-center {{ $user->is_payment_done == 0 ? 'text-warning': 'text-success' }} ">{{ $user->is_payment_done == 0 ? 'Pending': 'Done' }}</td>
                <td class="text-center"> {{ $user->created_at }}</td>
          </tr>
       
       
        </tbody>
      </table>
</div>
