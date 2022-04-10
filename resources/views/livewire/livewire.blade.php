<div>
    <h3>Question 1: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question1 as $question)
            <tr>
                <th>{{$question['agr_nom']}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3>Question 2: </h3>
    <ul>
        @foreach($question2 as $quest2)
            <li>{{$quest2["par_nom"]}}</li>
        @endforeach
    </ul>
    <h3>Question 3: </h3>
    <ul>
        @foreach($question3 as $question)
            <li><strong>Nom:</strong> {{$question["par_nom"]}} <strong>Lieu:</strong> {{$question["par_lieu"]}} <strong>Superficie:</strong> {{$question["par_superficie"]}}</li>
        @endforeach
    </ul>
    <h3>Question 4: </h3>
    <ul>
        @foreach($question4 as $quest4)
            <li>{{$quest4["par_nom"]}} Agr_Nom: {{$quest4["agr_nom"]}}</li>
        @endforeach
    </ul>
    <h3>Question 5: </h3>
    <ul>
        @foreach($question5 as $quest5)
            <li> Nombre de jours: {{$quest5["int_nb_jours"]}}</li>
        @endforeach
    </ul>
    <h3>Question 6: </h3>
    <ul>
        @foreach($question6 as $quest6)
            <li>Debut d'intervention {{$quest6['int_debut']}} le nom de la parcelle concernée: {{$quest6['par_nom']}}</li>
        @endforeach
    </ul>
    <h3>Question 7: </h3>
    <ul>
        @foreach($question7 as $quest7)
            <li>Debut d'intervention {{$quest6['int_Debut']}} le nom de la parcelle concernée: {{$quest6['par_nom']}} le nom de
                l’employé: {{$quest6['emp_nom']}}</li>
        @endforeach
    </ul>
</div>
