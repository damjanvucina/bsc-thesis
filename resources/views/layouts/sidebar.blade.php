<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">

        <h4>Dobrodošli na glavnu stranicu</h4>
        <hr>
        <p>Ovdje možete vidjeti kratak pregled svih trenutno aktivnih i dostupnih poslova. Klikom na na svaki od poslova
            otvara se novi prozor sa pojedinostima koje nudi svaki posao. Nadalje klikom na linkove ispod ovog teksta
            moguće je filtrirati ponuđene po poslove po vremenu objavljivanja, vremenu odvijanja te traženim
            tehnologijama odnosno jezicima.</p>
    </div>


    <br>

    @if(auth()->user()->usertype=='employee')
    <div class="sidebar-module">
        <h4>Moj filter</h4>
        <ul class="list-unstyled">
            <li>
                <a href="/employee/match">
                    <span class="badge badge-pill badge-warning">Filtriraj</span>
                </a>
            </li>
        </ul>
    </div>
    @endif


    <div class="sidebar-module">
        <h4>Arhiva objava</h4>
        <ul class="list-unstyled">
            @foreach($archivesCreate as $stats)
                <li>

                    <a href="/{{auth()->user()->usertype}}/index/?month={{$stats['month']}}&year={{$stats['year']}}&req=created_at">
                            <span class="badge badge-pill badge-success">
                           <?php

                                if ($stats['month'] == 'January'):
                                    echo 'Siječanj' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'February'):
                                    echo 'Veljača' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'March'):
                                    echo 'Ožujak' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'April'):
                                    echo 'Travanj' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'May'):
                                    echo 'Svibanj' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'June'):
                                    echo 'Lipanj' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'July'):
                                    echo 'Srpanj' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'August'):
                                    echo 'Kolovoz' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'September'):
                                    echo 'Rujan' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'October'):
                                    echo 'Listopad' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'November'):
                                    echo 'Studeni' . ' ' . $stats['year'];

                                elseif ($stats['month'] == 'December'):
                                    echo 'Prosinac' . ' ' . $stats['year'];

                                endif

                                ?>
                               </span>

                    </a>
                </li>
            @endforeach
        </ul>

    </div>

    <div class="sidebar-module">
        <h4>Arhiva poslova</h4>
        <ul class="list-unstyled">
            @foreach($archivesStart as $stats)
                <li>
                    <a href="/{{auth()->user()->usertype}}/index/?month={{$stats['month']}}&year={{$stats['year']}}&req=startdate">
                        <span class="badge badge-pill badge-success">
                        <?php

                            if ($stats['month'] == 'January'):
                                echo 'Siječanj' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'February'):
                                echo 'Veljača' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'March'):
                                echo 'Ožujak' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'April'):
                                echo 'Travanj' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'May'):
                                echo 'Svibanj' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'June'):
                                echo 'Lipanj' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'July'):
                                echo 'Srpanj' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'August'):
                                echo 'Kolovoz' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'September'):
                                echo 'Rujan' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'October'):
                                echo 'Listopad' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'November'):
                                echo 'Studeni' . ' ' . $stats['year'];

                            elseif ($stats['month'] == 'December'):
                                echo 'Prosinac' . ' ' . $stats['year'];

                            endif

                            ?>
                        </span>

                    </a>
                </li>
            @endforeach
        </ul>
    </div>


    <div class="sidebar-module">
        <h4>Gradovi</h4>
        <ul class="list-unstyled">
            @foreach($towns as $town)
                <li>
                    <a href="/{{auth()->user()->usertype}}/towns/{{$town}}">
                        <span class="badge badge-pill badge-default">{{$town}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="sidebar-module">
        <h4>Jezici</h4>
        <ul class="list-unstyled">
            @foreach($languages as $language)
                <li>
                    <a href="/{{auth()->user()->usertype}}/languages/{{$language}}">
                        <span class="badge badge-pill badge-primary">{{$language}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="sidebar-module">
        <h4>Tehnologije</h4>
        <ul class="list-unstyled">
            @foreach($skills as $skill)
                <li>
                    <a href="/{{auth()->user()->usertype}}/skills/{{$skill}}">
                        <span class="badge badge-pill badge-info">{{$skill}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="sidebar-module">
        <h4>Pronađite nas</h4>
        <ol class="list-unstyled">
            <li><a href="#"><span class="badge badge-pill badge-warning">Twitter</span></a></li>
            <li><a href="#"><span class="badge badge-pill badge-warning">Facebook</span></a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->