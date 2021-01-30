@extends('layouts.app')
@section('content')

    <h1>Welcome to Add SWOT Page</h1>
    <br>

    <P>Conduct the SWOT analysis.  It is a stocktaking exercise that looks at internal capacities; stakeholder needs vis-à-vis organizational responsiveness and the contextual realities in which the NHMSs operate.  The information it captures should provide insights on the gaps what the NHMSs current performance and what it is intending to achieve.  Note that the information is for helping to match the organisation’s goals, programmes and capacities to the social and economic environment in which it operates.]</P>
    
    <br>
    <form action="{{route('swots.store')}}" method="POST">
    @csrf
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                STRENGHTS  (Ling you can think of that makes your organization amazing!  What can you rely on to deliver your services?)
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">

                <div class="form-group">
                    <label for="strength1"></label>
                    <input type="text" class="form-control" id="strength1" name="strength1" placeholder="enter strength 1">
                  </div>
                  <div class="form-group">
                    <label for="strength2"></label>
                    <input type="text" class="form-control" id="strength2" name="strength2" placeholder="enter strength 2">
                  </div>
                  <div class="form-group">
                    <label for="strength3"></label>
                    <input type="text" class="form-control" id="strength3" name="strength3" placeholder="enter strength 3">
                  </div>
                  <div class="form-group">
                    <label for="strength4"></label>
                    <input type="text" class="form-control" id="strength4" name="strength4" placeholder="enter strength 4">
                  </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                WEAKNESSES (What isn’t quite the way it should be yet?  What is missing?)
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              
                <div class="form-group">
                    <label for="weakness1"></label>
                    <input type="text" class="form-control" name="weakness1" id="weakness1" placeholder="enter weakness 1">
                  </div>
                  <div class="form-group">
                    <label for="weakness2"></label>
                    <input type="text" class="form-control" name="weakness2" id="weakness2" placeholder="enter weakness 2">
                  </div>
                  <div class="form-group">
                    <label for="weakness3"></label>
                    <input type="text" class="form-control" name="weakness3" id="weakness3" placeholder="enter weakness 3">
                  </div>
                  <div class="form-group">
                    <label for="weakness4"></label>
                    <input type="text" class="form-control" name="weakness4" id="weakness4" placeholder="enter weakness 4">
                  </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                OPPORTUNITIES (List here any potential opportunities to really push your organization forward that you have not yet taken advantage of.)  
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              
                <div class="form-group">
                    <label for="opportunity1"></label>
                    <input type="text" class="form-control" name="opportunity1" id="opportunity1" placeholder="enter opportunity 1">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter opportunity 2">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter opportunity 3">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter opportunity 4">
                  </div>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  THREATS (List here any potential opportunities to really push your organization forward that you have not yet taken advantage of.)  
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                
                <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter threat 1">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter threat 2">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter threat 3">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter threat 4">
                  </div>
              </div>
            </div>
          </div>
      </div>
      <input type="submit" class="btn btn-success"   />
    </form>
      <br>

    

@endsection
