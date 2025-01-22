<div class="bg-white shadow rounded-lg">
    <div class="p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Logo
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Website
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($companies as $company)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $company->name }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $company->email }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($company->logo)
                                    <img src="{{ asset($company->logo) }}" alt="Logo" class=" object-cover" style="max-width: 80px; max-height: 80px;">
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $company->website }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('companies.show', [$company->id]) }}" 
                                       class="inline-flex items-center px-2 py-1 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                                         View
                                    </a>
                                    <a href="{{ route('companies.edit', [$company->id]) }}" 
                                       class="inline-flex items-center px-2 py-1 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                                         Edit
                                    </a>
                                    {!! Form::button(' Delete', [
                                        'type' => 'submit',
                                        'class' => 'inline-flex items-center px-2 py-1 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100',
                                        'onclick' => "return confirm('Are you sure?')"
                                    ]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-4 border-t border-gray-200">
        <div class="flex justify-end">
                {{ $companies->links() }}
        </div>
    </div>
</div>
