<div class="col-xs-12 section-title">
  <img src="/img/people/gifts.svg" class="icon-section icon-gifts">
  <h3>
    {{ trans('people.section_personal_gifts') }}

    <span>
      <a href="/people/{{ $contact->id }}/gifts/add" class="btn">{{ trans('people.gifts_add_gift') }}</a>
    </span>
  </h3>
</div>

@if ($contact->getGiftIdeas()->count() == 0 and $contact->getGiftsOffered()->count() == 0)

  <div class="col-xs-12">
    <div class="section-blank">
      <h3>{{ trans('people.gifts_blank_title', ['name' => $contact->getFirstName()]) }}</h3>
      <a href="/people/{{ $contact->id }}/gifts/add">{{ trans('people.gifts_blank_add_gift') }}</a>
    </div>
  </div>

@else

  <div class="col-xs-12 gifts-list">

    @if ($contact->getGiftIdeas()->count() != 0)
      <h2 class="gift-recipient">{{ trans('people.gifts_gift_idea') }}</h2>

      <ul class="table">
        @foreach($contact->getGiftIdeas() as $gift)
        <li class="table-row">
          <div class="table-cell date">
            {{ \App\Helpers\DateHelper::getShortDate($gift->getCreatedAt()) }}
          </div>
          <div class="table-cell">
            @if (! is_null($gift->getValue()))
              <span class="value">{{ Auth::user()->currency->symbol }} {{ $gift->getValue() }}</span>
            @endif
            {{ $gift->getName() }}
            @if (! is_null($gift->getUrl()))
              <span class="gift-list-item-url">
                <a href="{{ $gift->getUrl() }}">{{ trans('people.gifts_link') }}</a>
              </span>
            @endif
            @if(!is_null($gift->getWhoIsItFor()))
              <span class="for">
              For:
                {{ $gift->getWhoIsItFor() }}
              </span>
            @endif
          </div>
          <div class="table-cell comment">
            @if (! is_null($gift->getComment()))
              {{ $gift->getComment() }}
            @endif
          </div>
          <div class="table-cell list-actions">
            <a href="/people/{{ $contact->id }}/gifts/{{ $gift->id }}/delete" onclick="return confirm('{{ trans('people.gifts_delete_confirmation') }}')">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
          </div>
        </li>
        @endforeach
      </ul>
    @endif

    @if ($contact->getGiftsOffered()->count() != 0)
      <h2 class="gift-recipient">{{ trans('people.gifts_gift_already_offered') }}</h2>

      <ul class="table">
        @foreach($contact->getGiftsOffered() as $gift)
        <li class="table-row">
          <div class="table-cell date">
            {{ \App\Helpers\DateHelper::getShortDate($gift->getCreatedAt()) }}
          </div>
          <div class="table-cell">
            @if (! is_null($gift->getValue()))
              <span class="value">{{ Auth::user()->currency->symbol }} {{ $gift->getValue() }}</span>
            @endif
            {{ $gift->getName() }}
            @if (! is_null($gift->getUrl()))
              <span class="gift-list-item-url">
                <a href="{{ $gift->getUrl() }}">{{ trans('people.gifts_link') }}</a>
              </span>
            @endif
            @if(!is_null($gift->getWhoIsItFor()))
              <span class="for">
              For:
                {{ $gift->getWhoIsItFor() }}
              </span>
            @endif
          </div>
          <div class="table-cell comment">
            @if (! is_null($gift->getComment()))
              {{ $gift->getComment() }}
            @endif
          </div>
          <div class="table-cell list-actions">
            <a href="/people/{{ $contact->id }}/gifts/{{ $gift->id }}/delete" onclick="return confirm('{{ trans('people.gifts_delete_confirmation') }}')">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
          </div>
        </li>
        @endforeach
      </ul>
    @endif

  </div>

@endif
