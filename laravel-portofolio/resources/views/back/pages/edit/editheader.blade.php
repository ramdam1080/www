@extends('back/layouts/app')

@section('content')
    <form method="POST" action="{{ route('header.update', $header->id) }}">
        @csrf
        <div class="mb-3">
            {{-- <label for="exampleInputEmail1" class="form-label">icone</label>
        <input type="" class="form-control" name="icone" value="{{ $header->icone }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div> --}}
            {{-- <input type="checkbox" id="scales" name="scales">
            <label for="scales"><i class="bx bxl-twitter"></i></label>
            <input type="checkbox" id="scales" name="scales">
            <label for="scales"><i class="bx bxl-twitter"></i></label> --}}
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="icone" id="btnradio1" value='<i class="bx bxl-linkedin"></i>' >
                <label class="btn btn-outline-primary" for="btnradio1"><i class="bx bxl-linkedin"></i></label>

                <input type="radio" class="btn-check" name="icone" id="btnradio2" value='<i class="bx bxl-skype"></i>' >
                <label class="btn btn-outline-primary" for="btnradio2"><i class="bx bxl-skype"></i></label>

                <input type="radio" class="btn-check" name="icone" id="btnradio3" value='<i class="bx bxl-instagram"></i>' >
                <label class="btn btn-outline-primary" for="btnradio3"><i class="bx bxl-instagram"></i></label>
              
                <input type="radio" class="btn-check" name="icone" id="btnradio4" value="<i class='bx bxl-facebook'></i>">
                <label class="btn btn-outline-primary" for="btnradio4"><i class="bx bxl-facebook"></i></label>
              
                <input type="radio" class="btn-check" name="icone" id="btnradio5" value="<i class='bx bxl-twitter'></i>">
                <label class="btn btn-outline-primary" for="btnradio5"><i class="bx bxl-twitter"></i></label>

                <input type="radio" class="btn-check" name="icone" id="btnradio6" value="<i class='bx bx-shocked'></i>">
                <label class="btn btn-outline-primary" for="btnradio6"><i class='bx bx-shocked'></i></label>
              </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">class</label>
            <input name="class" type="text" value="{{ $header->class }}" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
