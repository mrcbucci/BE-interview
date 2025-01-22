<div class="bg-white shadow rounded-lg">
    <div class="p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Company Id
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($employees as $employee)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $employee->first_name }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $employee->last_name }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $employee->email }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $employee->phone }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $employee->company->name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <div class="flex justify-center space-x-2">
                                        <a href="{{ route('employees.show', [$employee->id]) }}" 
                                           class="inline-flex items-center px-2 py-1 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                                             View
                                        </a>
                                        <a href="{{ route('employees.edit', [$employee->id]) }}" 
                                           class="inline-flex items-center px-2 py-1 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                                             Edit
                                        </a>
                                        <button type="submit" 
                                                class="inline-flex items-center px-2 py-1 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                                             Delete
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-4 border-t border-gray-200">
        <div class="flex justify-end">
            @include('adminlte-templates::common.paginate', ['records' => $employees])
        </div>
    </div>
</div>
