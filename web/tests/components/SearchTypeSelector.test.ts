import { describe, it, expect } from "vitest"
import { mount, flushPromises } from "@vue/test-utils"
import SearchTypeSelector, { type SearchType } from "~/components/SearchTypeSelector.vue"

describe("SearchTypeSelector.vue", () => {
  it("renders", () => {
    const wrapper = mount(SearchTypeSelector)
    expect(wrapper).toBeTruthy()
  })

  it("should select initial modelValue", async () => {
    const wrapper = mount(SearchTypeSelector, {
      props: {
        modelValue: 'movies' as SearchType,
      }
    })

    await flushPromises()

    const checked = wrapper.get<HTMLFormElement>('input:checked')
    expect(checked.element.value).toBe('movies')
    
  })

  it("should emit update:modelValue when value changed", async () => {
    const wrapper = mount(SearchTypeSelector, {
      props: {
        modelValue: 'movies' as SearchType,
      }
    })

    await flushPromises()

    const input = wrapper.get<HTMLFormElement>('input[value:people]')
    input.setValue(true)

    expect(wrapper.emitted()).toHaveProperty('update:modelValue')
  })
})