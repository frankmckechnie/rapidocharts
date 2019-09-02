<template>
    <section role="navigation" class="nav">
      <div class="nav-right">
        <ul class="pull-right">
            <slot></slot>
        </ul>
      </div>
    </section>
</template>

<script>
export default {
  name: "navigation"
};
</script>