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

            <div class="form-group custom-select">
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
                <input type="text" name="price" id="price" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</section>

<script>
    <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</script>

@endsection