<div class="float-menu">
    <button type="button" class="float-widget badge-hover">
        <i class="material-icons">widgets</i><span class="badge arrow-right">widgets</span><sup>9</sup>
    </button>
    <ul class="float-list">
        <li class="float-item">
            <a href="{{ Route('compare') }}" class="badge-hover"><i class="purple material-icons">compare</i><span
                    class="badge arrow-right">compare</span><sup>2</sup></a>
        </li>
        <li class="float-item">
            <a href="{{ Route('favourite') }}" class="badge-hover"><i class="red material-icons">favorite</i><span
                    class="badge arrow-right">favorite</span><sup>4</sup></a>
        </li>
        <li class="float-item">
            <a href="{{ Route('notify') }}" class="badge-hover"><i class="orange material-icons">notifications</i><span
                    class="badge arrow-right">notify</span><sup>3</sup></a>
        </li>
    </ul>
</div>
<div class="mobile-menu">
    <a href="{{ Route('profile') }}"><i class="material-icons">person</i><span>account</span></a><a
        href="{{ Route('notify') }}"><i class="material-icons">notifications</i><span>notify</span><sup>9</sup></a><a
        href="{{ Route('create_ads') }}" title="sell vehicless"><i class="material-icons">storefront</i></a><a
        href="{{ Route('compare') }}"><i class="material-icons">compare</i><span>compare</span><sup>3+</sup></a><a
        href="{{ Route('favourite') }}"><i class="material-icons">favorite</i><span>favorite</span><sup>8</sup></a>
</div>
