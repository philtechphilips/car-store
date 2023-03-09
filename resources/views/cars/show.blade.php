@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $car->name }}
            </h1>
        </div>

    <div class="py-10 text-center">
         <div class="m-auto">
             <span class="uppercase text-blue-500 font-bold text-xs italic">
                 Founded: {{ $car->founded }}
             </span>
             <p class="text-lg text-gray-700">
                {{ $car->description }}
             </p>
             <img src="{{ asset('images/' . $car->image_path)  }}">
            <table class="table-auto">
                <tr class="bg-blue-100">
                    <th class="w-1/2 border-4 border-gray-500">
                        Model
                    </th>
                    <th class="w-1/2 border-4 border-gray-500">
                        Engines
                    </th>
                </tr>

                @forelse ($car->carModels as $model)
                    <tr>
                        <td class="border-4 border-gray-500">
                            {{ $model->model_name }}
                        </td>
                        <td class="border-4 border-gray-500">
                            @foreach ($car->engines as $engine)
                                @if ($model->id == $engine->model_id)
                                    {{ $engine->engine_name }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </table>
             <hr class="mt-4 mb-8"> 
         </div>
     </div>
 </div>
@endsection