
    <h1>Please check your email for verfication</h1>
    <form action="{{route('verification.send')}}" method="post">
        @csrf
        <button type="submit">Resend Verification</button>
    </form>
