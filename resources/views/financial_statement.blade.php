@extends('layouts.app')

@section('content')
    <div class="financial_statement">
        <div class="recruitment">
            <div class="row title">
                <div class="title-content col-sm-12 ">
                    <div class="title-header">
                        <img class="icon" src="{{ 'assets/images/icons/' }}/Financial_statements.svg" alt="Summery icon">
                        <h3>Financial statements</h3>
                    </div>

                    <p>
                        You need to make a cash flow statement, and profit and loss statement from the table. To make it
                        perfect please choose from the list.
                    </p>
                </div>

            </div>
        </div>

        <div class="details">
            <div class="row">
                <div class="col-6">
                    <a href="" class="btn btn-fs flex-column-center">
                        Financial statements
                    </a>
                </div>
                <div class="col-6 ">
                    <a href="" class="btn btn-cfs flex-column-center">
                        Cash flow statement
                    </a>
                </div>
            </div>

            <div class="row" style="margin-top: 36px">
                <div class="col-4">
                    <div class="items-container">
                        <ul>
                            <li class="item" draggable="true">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Salaries expenses</p>
                                <p class="bdt">BDT 8</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Salaries expenses</p>
                                <p class="bdt">BDT 8</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Salaries expenses</p>
                                <p class="bdt">BDT 8</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Salaries expenses</p>
                                <p class="bdt">BDT 8</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Material cost</p>
                                <p class="bdt">BDT 10</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Material cost</p>
                                <p class="bdt">BDT 10</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Material cost</p>
                                <p class="bdt">BDT 10</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Material cost</p>
                                <p class="bdt">BDT 10</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Revenues from A </p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Revenues from A </p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Revenues from A </p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Revenues from A </p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Debts payments</p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Debts payments</p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Debts payments</p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Debts payments</p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-8 fs">
                    <div class="card revenue">
                        <div class="card-header flex-column-center">Revenue</div>
                        <div class="card-body">
                            <div class="items-container">
                                <ul>
                                    <li class="item">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">Revenues from A </p>
                                        <p class="bdt">BDT 100</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                    <li class="item">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">Material cost</p>
                                        <p class="bdt">BDT 20</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                    <li class="item">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">Revenues from A </p>
                                        <p class="bdt">BDT 100</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                    <li class="item">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">Material cost</p>
                                        <p class="bdt">BDT 20</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="card-footer">
                            <p>Total Net Revenue</p>
                            <p>BDT 40</p>
                        </div>
                    </div>
                    <div class="card expenses">
                        <div class="card-header flex-column-center">Expenses</div>
                        <div class="card-body">
                            <div class="items-container">

                            </div>
                        </div>
                        <div class="card-footer">
                            <p>Total Expenses</p>
                            <p>BDT 00</p>
                        </div>
                    </div>

                    <div class="net-income flex-column-center">
                        Net Income: BDT 00
                    </div>
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
