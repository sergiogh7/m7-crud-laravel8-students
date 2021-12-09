<x-app-layout> <x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">{{
	__('Students') }}</h2>
</x-slot>

<div class="py-12">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

			<div class="flex flex-col">
				<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
					<div
						class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

						<!-- Flash alert-->
						@if(session('success'))
						<div
							class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
							role="alert">
							<strong class="font-bold">Success!</strong> <span
								class="block sm:inline">{{session('success')}}.</span>
							<span class="absolute top-0 bottom-0 right-0 px-4 py-3"> <svg
									class="fill-current h-6 w-6 text-green-500" role="button"
									xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
									<title>Close</title><path
										d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" /></svg>
							</span>
						</div>
						@endif
						<div
							class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
							<div>
								<a href="{{route('students.create')}}"
									class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">Create
									Student</a>
							</div>
							<table class="min-w-full divide-y divide-gray-200">
								<thead>
									<tr>
										<th class="px-4 py-2">Name</th>
										<th class="px-4 py-2">Email</th>
										<th class="px-4 py-2">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($students as $student)
									<tr @if ($loop->
										odd) class="bg-gray-100" @endif >
										<td class="border px-4 py-2">{{$student->name}}</td>
										<td class="border px-4 py-2">{{$student->email}}</td>
										<td class="border px-4 py-2">

											<form action="{{ route('students.destroy', $student->id) }}"
												method="POST">

												<a href="{{ route('students.show', $student->id) }}"
													title="show"> <i class="fal fa-eye text-success  fa-lg"></i>
												</a> <a href="{{ route('students.edit', $student->id) }}"
													title="edit"> <i class="fal fa-edit  fa-lg"></i>

												</a> @csrf @method('DELETE')

												<button type="submit" title="delete"
													style="border: none; background-color: transparent;">
													<i class="fal fa-trash fa-lg text-danger"></i>

												</button>
											</form>

										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</x-app-layout>
