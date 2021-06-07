@extends('layouts.app')

@section('content')
    <div class="decision_driven">
        <div class="details">
            <div class="row">
                <div class=" col-md-4">
                    <div class="box">
                        <div class="box-body">
                            <p class="txt">Net profit</p>
                            <p class="number">897</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <p>Market share</p>
                        </div>
                        <div class="box-body">

                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <p>Revenue / 914</p>
                        </div>
                        <div class="box-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <p>Cost</p>
                        </div>
                        <div class="box-body">

                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <p>Unit sales in countries</p>
                        </div>
                        <div class="box-body">

                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <p>Pricing vs. Competition</p>
                        </div>
                        <div class="box-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <p>Bangladesh: <span class="pc">Pricing vs. Competition</span></p>
                        </div>
                        <div class="box-body">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <p>Nepal: <span class="pc">Pricing vs. Competition</span></p>
                        </div>
                        <div class="box-body">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="" class="btn btn-submit">Submit</a>
                </div>
            </div>

            <div class="prev_next_div">
                <a href="" class="btn btn-game1 btn-next">
                    Previous
                    <img class="icon" src="{{ 'assets/images/icons/' }}/Previous.svg" alt="Previous icon">
                </a>
                <a href="" class="btn btn-game1 btn-next">
                    Next
                    <img class="icon" src="{{ 'assets/images/icons/' }}/Next.svg" alt="Next icon">
                </a>
            </div>

        </div>


    </div>

@endsection
