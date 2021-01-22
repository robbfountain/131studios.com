<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')

        <title>{{ $title ?? config('app.name') }} </title>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>

    <body>
        <section class="container mx-auto text-gray-700">
            <h1 class="text-2xl my-6 text-center">WEBSITE DESIGN AGREEMENT</h1>

            <p class="mb-6">
                This Website Design Agreement (the “Agreement”) is entered into <span
                        class="font-bold underline pb-2">{{$contract->created_at->format('M d, Y')}}</span> (the
                “Effective Date”), by
                and
                between <span class="font-bold underline pb-2">{{$contract->business_name}} operated
                    by {{$contract->name}}</span>, with an address of <span
                        class="font-bold underline pb-2">{{$contract->address}}</span> (the “Client”) and
                <span class="font-bold underline pb-2">{{$contract->designer}}</span>, (the “Designer”), collectively
                “the Parties.”
            </p>

            <h2 class="font-bold text-lg mb-2">Project Description</h2>

            <div class="p-3 m-8  border-l-4 border-gray-1s00">
                {!! $contract->scope !!}
            </div>

            <h2 class="font-bold text-lg mb-2">Schedule</h2>
            <p class="mb-6">The Parties agree to the following schedule:</p>

            <ul>
                <li class="ml-2 mb-2">Initial Design Date: <span
                            class="font-bold underline pb-2">{{$contract->starts_at->format('M d, Y')}}</span></li>
                @if($contract->approval_milestone)
                    <li class="ml-2 mb-2">Client Comment/Approval Date: <span
                                class="font-bold underline pb-2">{{$contract->approval_milestone->format('M d, Y')}}</span>
                    </li>
                @endif
                <li class="ml-2 mb-2">Final Design Date: <span
                            class="font-bold underline pb-2">{{$contract->ends_at->format('M d, Y')}}</span></li>
            </ul>

            <h2 class="font-bold text-lg mb-2 mt-6">Revisions</h2>
            <p class="mb-6">Client shall be entitled to <span
                        class="font-bold underline pb-2">{{$contract->revisions}}</span> revision(s). Any revisions
                beyond <span class="font-bold underline pb-2">{{$contract->revisions}}</span> shall be chargeable at a
                rate of <span class="font-bold underline pb-2">${{$contract->revision_cost}}</span>.
            </p>

            <h2 class="font-bold text-lg mb-2">Payment</h2>
            <p class="mb-6"> The Parties agree to the following Payment and Payment Terms:</p>
            <ul>
                @if($contract->is_monthly)
                    <li class="ml-2 mb-2">
                        Monthly Fee for Services: <span
                                class="font-bold underline pb-2">${{$contract->total_cost}}</span></li>
                    <li class="ml-2 mb-2">Initial Term (Months): <span
                                class="font-bold underline pb-2">${{$contract->monthly_billing_duration}}</span></li>
                    <li class="ml-2 mb-2">Total Cost for initial {{$contract->monthly_billing_duration}} months: <span
                                class="font-bold underline pb-2">${{$contract->total_cost * $contract->monthly_billing_duration}}</span></li>
                @else
                    <li class="ml-2 mb-2">
                        Total Fee for Services: <span
                                class="font-bold underline pb-2">${{$contract->total_cost}}</span></li>
                    <li class="ml-2 mb-2">Deposit (Due Before Project Start Date): <span
                                class="font-bold underline pb-2">${{$contract->deposit}}</span></li>
                    <li class="ml-2 mb-2">Remaining Balance Due (Due on Final Design Date): <span
                                class="font-bold underline pb-2">${{$contract->balance}}</span></li>
                @endif
            </ul>

            @if($contract->is_monthly)
                <p class="mt-4">After initial term, client will be billed monthly at current rate of ${{$contract->total_cost}}</p>
            @endif


            <h2 class="font-bold text-lg mb-2 mt-6">Confidentiality.</h2>
            <p class="mb-6">During the course of this Agreement, it may be necessary for Client to share proprietary
                information, including trade secrets, industry knowledge, and other confidential information, to
                Designer in
                order for Designer to complete the Website in its final form. Designer will not share any of this
                proprietary
                information at any time, even after the Agreement is fulfilled. Designer also will not use any of this
                proprietary information for his/her personal benefit at any time, even after the Agreement is
                fulfilled.</p>
            <h2 class="font-bold text-lg mb-2">Ownership Rights</h2>
            <p class="mb-6">Client continues to own any and all proprietary information it shares with Designer
                during
                the term of this Agreement for the purposes of the Project. Designer has no rights to this proprietary
                information and may not use it except to complete the Project. Upon completion of the Agreement, Client
                will
                own
                the final website design. Designer may display a link to the Client’s website and display a graphical
                representation of the Client’s website (screenshot) on Designer’s website for promotional purposes.
                While Designer will customize Client’s Website to Client’s specifications, Client recognizes that
                websites
                generally have a common structure and basis. Designer continues to own any and all template designs it
                may
                have
                created prior to this Agreement. Designer will further own any template designs it may create as a
                result of
                this Agreement.</p>

            <h2 class="font-bold text-lg mb-2">Representations and Warranties</h2>
            <p class="mb-6">Designer. Designer represents and warrants that he/she has the right to enter into and
                perform this
                Agreement.
                Designer further represents and warrants that he/she has the right to utilize and distribute the designs
                created
                for Client and that such designs are not owned by anyone else to Designer’s knowledge. In the event that
                Designer does not have these rights, Designer will repay any associated damages Client may experience or
                will
                take responsibility so that Client does not experience any damages.
                Client. Client represents and warrants that he/she has the rights to use any proprietary information,
                including,
                but not limited to trade secrets, trademarks, logos, copyrights, images, data, figures, content, and the
                like
                that it may provide to Designer to be included in this Website. In the event that Client does not have
                these
                rights, Client will repay any associated damages Designer may experience or will take responsibility so
                that
                Designer does not experience any damages.</p>

            <h2 class="font-bold text-lg mb-2">Disclaimer of Warranties</h2>
            <p class="mb-6">Designer shall create a Website for Client’s purposes and to Client’s
                specifications. DESIGNER DOES NOT REPRESENT OR WARRANT THAT SAID WEBSITE WILL CREATE ANY ADDITIONAL
                PROFITS,
                SALES, EXPOSURE, BRAND RECOGNITION, OR THE LIKE. DESIGNER HAS NO RESPONSIBILITY TO CLIENT IF THE WEBSITE
                DOES
                NOT LEAD TO CLIENT’S DESIRED RESULT(S).</p>
            <h2 class="font-bold text-lg mb-2">Limitation of Liability</h2>
            <p class="mb-6">UNDER NO CIRCUMSTANCES SHALL EITHER PARTY
                BE LIABILE TO THE OTHER PARTY OR ANY
                THIRD
                PARTY FOR ANY DAMAGES RESULTING FROM ANY PART OF THIS AGREEMENT SUCH AS, BUT NOT LIMITED TO, LOSS OF
                REVENUE
                OR
                ANTICIPATED PROFIT OR LOST BUSINESS, COSTS OF DELAY OR FAILURE OF DELIVERY.</p>
            <h2 class="font-bold text-lg mb-2">Legal Fees</h2>
            <p class="mb-6">In the event of a dispute resulting in legal action, the
                successful party will be entitled to
                its
                legal fees, including, but not limited to its attorneys’ fees.</p>
            <h2 class="font-bold text-lg mb-2">Legal and Binding Agreement</h2>
            <p class="mb-6">This Agreement is legal and binding
                between the Parties as stated above. This
                Agreement may be entered into and is legal and binding both in the United States and throughout Europe.
                The
                Parties each represent that they have the authority to enter into this Agreement.</p>

            <p class="mb-6">The Parties agree to the terms and conditions set forth above as demonstrated by their
                signatures as
                follows:</p>


            <h2 class="font-bold text-lg mb-2">“CLIENT”</h2>
            <div class="flex justify-between">
                <div class="mb-12">Signed: _____________________________________</div>
                <div class="mb-12">Date: _______________________________________</div>
            </div>

            <h2 class="font-bold text-lg mb-2">“DESIGNER”</h2>
            <div class="flex justify-between">
                <div class="mb-12">Signed: _____________________________________</div>
                <div class="mb-12">Date: ______________________________________</div>
            </div>
        </section>

        @yield('scripts','')
    </body>
</html>



