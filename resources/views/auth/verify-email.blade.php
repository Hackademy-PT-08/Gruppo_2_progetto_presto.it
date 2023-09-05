<x-layout>
    <!-- vista per email di verifica -->
    <p>è stata inviata una mail di conferma </p>

    <!-- form per invio nuova email -->
    <form action="/email/verification-notification" method="post">
        <!-- input per l'ivio di una nuova email di verifica -->
        <input type="submit" value="invia una nuova email">
    </form>
</x-layout>