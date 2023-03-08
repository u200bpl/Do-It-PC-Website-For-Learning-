@extends('layouts.base')
@section('content')

<section class="create-pc">
    <div class="container">
        <form action="{{route('gamingpc.store')}}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="processor_id">Processor</label>
                <select name="processor_id" id="processor_id" class="form-control">
                    @foreach ($processors as $processor)
                        <option value="{{ $processor->id }}">{{ $processor->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="motherboard_id">Motherboard</label>
                <select name="motherboard_id" id="motherboard_id" class="form-control">
                    @foreach ($motherboards as $motherboard)
                        <option value="{{ $motherboard->id }}">{{ $motherboard->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="graphicscard_id">Graphicscard</label>
                <select name="graphicscard_id" id="graphicscard_id" class="form-control">
                    @foreach ($graphicscards as $graphicscard)
                        <option value="{{ $graphicscard->id }}">{{ $graphicscard->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ram_id">RAM</label>
                <select name="ram_id" id="ram_id" class="form-control">
                    @foreach ($rams as $ram)
                        <option value="{{ $ram->id }}">{{ $ram->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ssd_id">SSD</label>
                <select name="ssd_id" id="ssd_id" class="form-control">
                    @foreach ($ssds as $ssd)
                        <option value="{{ $ssd->id }}">{{ $ssd->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="hdd_id">HDD</label>
                <select name="hdd_id" id="hdd_id" class="form-control">
                    @foreach ($hdds as $hdd)
                        <option value="{{ $hdd->id }}">{{ $hdd->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="cooler_id">Cooler</label>
                <select name="cooler_id" id="cooler_id" class="form-control">
                    @foreach ($coolers as $cooler)
                        <option value="{{ $cooler->id }}">{{ $cooler->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="powersuply_id">Powersuply</label>
                <select name="powersuply_id" id="powersuply_id" class="form-control">
                    @foreach ($powersuplies as $powersuply)
                        <option value="{{ $powersuply->id }}">{{ $powersuply->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="case_id">Case</label>
                <select name="case_id" id="case_id" class="form-control">
                    @foreach ($cases as $case)
                        <option value="{{ $case->id }}">{{ $case->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Geschat: 1500">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</section>

<script>

</script>

@endsection