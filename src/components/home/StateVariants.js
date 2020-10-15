import { IconContainer, Caption, BigText, Paragraph, Link } from '@/components/home/common'
import { GradientLockup } from '@/components/GradientLockup'
import { CodeWindow } from '@/components/CodeWindow'
import { gradients } from '@/utils/gradients'
import { ReactComponent as Icon } from '@/img/icons/home/state-variants.svg'

export function StateVariants() {
  return (
    <section>
      <div className="px-8 mb-20">
        <IconContainer className={`${gradients.lightblue} mb-8`}>
          <Icon />
        </IconContainer>
        <Caption as="h2" className="text-lightBlue-500 mb-3">
          State variants
        </Caption>
        <BigText className="mb-8">Hover and focus states? We got ’em.</BigText>
        <Paragraph className="mb-6">
          Want to style something on hover? Stick hover: at the beginning of the class you want to
          add. Works for focus, active, disabled, focus-within, focus-visible, and even fancy states
          we invented ourselves like group-hover.
        </Paragraph>
        <Link href="#" className="text-lightBlue-500">
          Learn more -&gt;
        </Link>
      </div>
      <GradientLockup
        color="lightblue"
        rotate={1}
        left={
          <div className="relative z-10 bg-white rounded-xl shadow-lg -mr-8">
            <section className="px-6 pt-4 pb-6 space-y-4">
              <header className="flex items-center justify-between">
                <h2 className="text-lg leading-6 font-medium text-black">Projects</h2>
                <button
                  type="button"
                  className="flex items-center rounded-md bg-lightBlue-100 text-lightBlue-500 text-sm leading-5 font-medium px-4 py-2"
                >
                  <svg width="12" height="20" fill="currentColor" className="mr-2">
                    <path
                      fillRule="evenodd"
                      clipRule="evenodd"
                      d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"
                    />
                  </svg>
                  New
                </button>
              </header>
              <form className="relative">
                <svg
                  width="20"
                  height="20"
                  fill="currentColor"
                  className="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  />
                </svg>
                <input
                  type="text"
                  aria-label="Filter projects"
                  placeholder="Filter projects"
                  className="w-full text-sm leading-5 text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10 focus:border-lightBlue-300 focus:outline-none"
                />
              </form>
              <ul className="grid grid-cols-2 gap-4">
                {Array.from({ length: 3 }).map((_, i) => (
                  <li key={i}>
                    <a
                      href="#"
                      className="group block rounded-lg p-4 border border-gray-200 hover:bg-lightBlue-500 hover:border-transparent hover:shadow-lg"
                    >
                      <h3 className="leading-6 font-medium text-black group-hover:text-white">
                        API Integration
                      </h3>
                      <dl>
                        <dt className="sr-only">Category</dt>
                        <dd className="text-sm leading-5 font-medium group-hover:text-lightBlue-200 mb-4">
                          Engineering
                        </dd>
                        <dt className="sr-only">Users</dt>
                        <dd className="flex -space-x-2">
                          {Array.from({ length: 5 }).map((_, j) => (
                            <img
                              key={j}
                              src={`https://unsplash.it/48/48?random&amp;i=${i}&j=${j}`}
                              alt=""
                              width="48"
                              height="48"
                              className="w-7 h-7 rounded-full border-2 border-white"
                            />
                          ))}
                        </dd>
                      </dl>
                    </a>
                  </li>
                ))}
                <li className="flex">
                  <a
                    href="#"
                    className="w-full flex items-center justify-center rounded-lg border-2 border-dashed border-gray-200 text-sm font-medium"
                  >
                    New Project
                  </a>
                </li>
              </ul>
            </section>
          </div>
        }
        right={<CodeWindow className="bg-lightBlue-500" />}
      />
    </section>
  )
}
